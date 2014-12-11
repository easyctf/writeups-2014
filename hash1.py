def hash1(n):
    ret = [0]*16
    for i in range(len(n)):
        ret[i%16] += ord(n[i])
    return "".join([chr(i%26 + 97) for i in ret])
