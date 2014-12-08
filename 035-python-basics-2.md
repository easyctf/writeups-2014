# 35 - Python Basics 2

*Written by Emily Leng*

## Problem

You're faced with a control panel. There are some instructions left on a sign nearby on the wall: This machine generates random numbers that you can access through the variable `args[0]`. If the number is greater than or equal to 0 and less than 100, print `hacks`. If the number is greater than or equal to 100, print `haxx`. If the number is negative, print `hakz`. Use the IDE (Python Editor) to complete this problem.

## Hint

What are [conditionals](http://learn.easyctf.com/content/python-conditional.html)?

## Solution

```python
x = args[0]
if x >= 100:
    print "haxx"
elif x >= 0:
    print "hacks"
else:
    print "hackz"
```

## Flag

`just-simple-logic-no-haxx-involved`