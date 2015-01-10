# 180 - The Door

```
Step 1.
As with all reverse engineering questions, the first question you need to ask yourself is what do I want this program to do that it currently isn't.
In the case of door.c, we need to run this line of code:
printf("Good detective work, your flag is: %d_%d\n",flagFunc(4407091,(int)(137.0*(secretKey)/15.2)),flagFunc(1992,197));
Specifically, we need to call the function "flagFunc", so the next step is finding out where flagFunc is defined:
twochainz flagFunc=generateFlagFunc(secretKey);

Step 2.
Ok, so what exactly is this 'twochainz' type (not Tauheed Epps)-- at the top of our c code we see this typedef:
	typedef int (*twochainz)(int,int);
So now we know that flagFunc is a pointer to a function which takes two integer arguments and returns an integer (type twochainz), which makes sense since our printf format string id '%d', the integer format type.

Step 3.
Next on the list we have got to see where the point has come from, so lets go into 'generateFlagFunc' to find out.
Before we enter into generateFlagFunc, we must look at the argument that is passed, 'secretKey', which is passed to generateDouble as the double 'seed'.
Many (inexperienced) reverse engineers would start at the top and work their way down, but this is foolish in reverse engineering. We only need to focus on what we care about, and we care about the return value so lets jmp there (but not xret).
Alrighty, so the looks like this:
	return (twochainz)buf;
Now we know that buf must contain a pointer to our magic function, so lets find where buf is first defined to see where our code is coming from:
	unsigned short * buf=(unsigned short *)malloc(len+1);
Step 4.
Sweet, so now we know that the code between the definition of buf and its return must transform and empty buffer of unsigned shorts into x86 assembly which can be executed, so lets focus our energy on that for now:
	int len=sizeof(secretMsg)/4;//this is on the first line, but we need it for the loop
	for(int i=0;i<len/2;i++)
	{
		buf[i]=(unsigned short)(roundVal(secretMsg[i]*seed-1));
		seed+=1.0;
	}
Step 5.
Alright, so in here its filling in the values of buf using seed and elements of the array 'secretMsg'. We don't know seed, but we do know secretMsg, so lets write the first value of buf in terms of seed, so we can reduce the complexity of the problem:
buf[0]=secretMsg[0]*seed-1;
buf[0]=413.414948585843*seed-1;
Therefore, the first two bytes of the function flagFunc must be equal to 413.414948585843*seed-1 (since the first two bytes of buf are buf[0] and &buf[0] is flagFunc)

Step 6.
		Good stuff Carter, but what the hell good does that do us?

If you know anything about C, reverse engineering or x86, you'll know that all C functions must start by pushing the caller function's base pointer to the stack, and move the old stackpointer into the current base pointer before you do anything, or else the current function will overwrite data used by the other function when it allocates memory in the base frame.
Specifically, all C functions in x86 must start with these two instructions:
push rbp # push base frame pointer to stack
mov rbp, rsp # move stack pointer into base frame pointer

Therefore, the first few bytes for our function must be the hexadecimal representation for these two instructions when they are assembled. When you do assemble them you get this:
0x55 for 'push rbp' (One Byte)
0x48,0x89,0xE5 for 'mov rbp, rsp' (Three Bytes)
Hence, the first two bytes of the buffer must be 0x55 and 0x48, and buf[0] must be the short which is represented by these two bytes, so buf[0]=0x4855

Step 7.
YAY! Now all we need to do is some algebra to find seed:
buf[0]=0x4855
buf[0]=413.414948585843*seed-1 //See step 5
0x4855=413.414948585843*seed-1
0x4855+1=413.414948585843*seed
(0x4855+1)/413.414948585843=seed
seed=(0x4855+1)/413.414948585843
seed=44.7927682909

Step 8.
Ok, now that we know what see must be, lets figure out where see comes from so we can make sure it will be 44.7927682909:
	double secretKey;
	scanf("%lf",&secretKey);
	
	twochainz flagFunc=generateFlagFunc(secretKey);
As you can see, its just the double value we entered for secret key, so now lets compile door.c and plugin 44.7927682909 for our (secretKey) input value:

Microsoft Windows [Version 6.3.9600]
(c) 2013 Microsoft Corporation. All rights reserved.

C:\Users\Carter\Desktop\tcc\door>door
--- DOOR! DOOR! WHO STOLE THE DOOR? ---
In order to identify who stole the door, please enter the secret key below

Secret key: 44.7927682909
Good detective work, your flag is: 1992_-2

C:\Users\Carter\Desktop\tcc\door>

Step 9:
WE GOT THE FLAG!@#%!#@%!@%@%!@#%!@%!%!!!!!

Step 10 - Regret:
As you are probably guessing, there is an easier way to do this, and to do this we must look at the question - "Who stole the door". If you've read Surely You're Joking Mr. Feynman (BEST BOOK EVER), you know that Feynman stole the door.
So, the secret key is the double value represented by the 8 bytes below:
40 46 65 79 6E 6D 61 6E
Or in ascii as: @Feynman

yup, it was pretty damn easy.

-- Addenda: Revised Step 1 --

Step 1: You make your console cost the most, you beat your chest and proudly boast--despite no good exclusive games, you make a bunch ridiculous claims. 

Then ignore our need to play online
Don't make it fun like Xbox Live
Use Blue Ray, Which I don't need
Now you're getting your ass kicked by the Wii

Sony, you went wrong, with your PS3
I'll just keep playing my 360
Hope this song has helped, you understand
Now you know, How You Killed Your Brand.
Shouts to my fave pen pal Marc E. Mayer (http://www.msk.com/attorneys/Marc_Mayer)
```

