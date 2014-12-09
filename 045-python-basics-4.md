# 45 - Python Basics 4 (TODO)

*Written by Emily Leng*

## Problem

`args` is an array of 5 variables than can be accessed with `args[0]`, `args[1]` etc. Write some python code in the IDE to concatenate `args[0]`, `args[1]`'s type (`string` or `integer`), `args[2]`'s length, `args[3]`'s square root as an integer (will be a perfect square), and `args[4]` in reverse.

Clarification: for `args[0]`, concatenate its value, not its type.

## Hint

I hope you're taking notes; this stuff will be on the harder problems :)

## Solution
This was the intended solution, but it turns out Skulpt does not implement the type method very well, but since you know `args[3]` is either a string or an integer, it is pretty easy to obtain the flag.

```python
import math
print args[0]+str(type(args[1]))+str(len(args[2]))+str(math.sqrt(args[3]))+str(args[4][::-1])
```

## Flag

`combine_all_y0ur_kn0wledge`
