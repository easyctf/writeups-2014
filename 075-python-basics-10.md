# 75 - Python Basics 10

*Written by Emily Leng*

## Problem

`args[0]` is a result of XOR encryption on two hexadecimal strings. You only know one of the two original strings, `args[1]`, can you find the other?

Clarification: after finding the second string you should print the ascii representation of it as the answer in the Python Editor.

## Hint

The operation `^` in python only works on numbers. The built in functions `ord()` and `chr()` convert between characters and numbers.

## Solution

```python
def xor_strings(xs, ys):
    return "".join(chr(ord(x) ^ ord(y)) for x, y in zip(xs, ys))
a = ''.join([chr(int(''.join(c), 16)) for c in zip(args[0][0::2], args[0][1::2])])
b = ''.join([chr(int(''.join(c), 16)) for c in zip(args[1][0::2], args[1][1::2])])
c = xor_strings(a,b)
print c
```

## Flag

`x0r_encrypti0n_is_be_e4sy_t0_crack`
