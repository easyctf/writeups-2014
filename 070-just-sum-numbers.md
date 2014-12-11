# 70 - Just Sum Numbers

*Written by Emily Leng*

## Problem

Algorithmic problems require you to write a program to solve the problem in the online python editor. Data will be generated randomly, as well as the solutions. If your program produces the required answer, the flag will be given to you. You can find this using the python link in the navigation menu above.

Given positive integers A, B, C, and L, find the sum of all the distinct multiples of A, B, and C under L.

The variables A, B, C, and L are passed through an array of variables called args. You don't have to create this; it's already there for you. This is how the generated data is passed to your program:

`args = [A, B, C, L];`

## Hint

If you don't know how to do this problem just yet, try the Python Basics problem series first.

## Solution

```python
s = 0
for x in range(0,args[3]):
  if x%args[0]==0 or x%args[1]==0 or x%args[2]==0:
    s += x
    
print s
```

## Flag

`is_this_pr0jekt_o1ler?`
