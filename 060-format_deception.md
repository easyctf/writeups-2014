# 60 - Format Deception

*Written by Michael Zhang and Sean Anderson, Writeup by MegaAbsol*

## Problem

What kind of file is this (format_deception.nds)?

## Hint

After you manage to open the .nds file, (if you don't know how, Google is your best friend), look around for your flag. Maybe go against your first instinct.

## Solution

```
$ file format_deception.nds
format_deception.nds: OpenDocument Text
$ libreoffice format_deception.nds
```

A document with the flag inside.

## Flag

`d0nt_judg3_a_file_by_1ts_ext3nsi0n`
