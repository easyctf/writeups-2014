# 70 - Python Basics 9 

*Written by Emily Leng*

## Problem

Head over to the Python Editor and print the greatest common factor between `args[0]` and `args[1]`.

## Hint

Defining a *function* that finds a GCF will be of use.

## Solution

```python
def gcd(x, y):
    while y != 0:
        (x, y) = (y, x % y)
    return x
  
print gcd(args[0],args[1])
```

## Flag

`programming_beats_calculating_by_hand_any_day`
