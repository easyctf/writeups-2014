# 75 - Golden Ratio Obsession

*Written by Austin Zhou*

## Problem

Find the Number of Digits in the 16th Fibonacci Number that Contains 1618 and is Divisible by 1618.

## Hint

Use your knowledge from the previous basic python problems! (You are not, however, limited to python for this problem - you can compute the answer in any language you'd like.)

## Solution

Using your python knowledge from python basics it should be easy to write a brute force algorithm.

```python
def fib():
	a = 1
	b = 1
	while True:
		a,b = a+b,a
		yield a
count = 0
for i in fib():
	if "1618" in str(i) and i%1618==0:
		count+=1
	if count == 16:
		print len(str(i))
		break
```

This should yield the number `7092` and that is your flag.

## Flag

`7092`










