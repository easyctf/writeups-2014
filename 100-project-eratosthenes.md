# 100 - Project Eratosthenes 

*Written by Michael Zhang, Writeup by Emily Leng*

## Problem

The first 5 primes are 2, 3, 5, 7, and 11. The 2nd, 3rd, 5th, 7th, and 11th primes are (respectively) 3, 5, 11, 17, and 31. The sum of these primes is 67. Let `Q(n)` be the sum of the `k`th prime where `k` is the first `n` prime numbers, as shown above. Then `Q(5) = 67`.

It can be confirmed that `Q(35) = 11735` and `Q(85) = 107591`.

If `args = [M,N]`, find `Q(M)` + `Q(N)`, using the python editor.

## Hint

Find an efficient way to generate primes.

## Solution

```python
def isPrime(num):
    # Checks for primality & returns a boolean.
    if num == 2:
        return True
    elif num < 2 or not num % 2: # even numbers > 2 not prime
        return False
        # factor can't be larger than the square root of num
    for i in range(3, int(num ** .5 + 1), 2):
        if not num % i: return False
    return True

def generatePrimes(n):
    # Returns a list of prime numbers with length n
    primes = [2,]
    noOfPrimes = 1
    testNum = 3 # number to test for primality

    while noOfPrimes < n:
        if isPrime(testNum):
            primes.append(testNum)
            noOfPrimes += 1
        testNum += 2
    return primes

l = generatePrimes(10000)

def q(n):
	tot = 0
	l2 = l[:n]
	for x in l2:
		tot+= l[x-1]
	return tot

print (q(args[0]) + q(args[1]))

```

## Flag

`n0t_pr0jekt_o1ler_but_s1mil4r`
