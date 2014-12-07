# 30 - Linux Basics 1

## Problem

Many servers (including web servers) are run on machines that use an operating system called Linux. Most of you are familiar with an operating system such as Windows or Mac OS X, or maybe a mobile operating system such as Android or iOS.

Linux has a shell, or a command-line interface, which is similar to an interface you may see when you open Command Prompt on Windows or Terminal on Mac. In a shell, you type commands to the machine and it executes your command.

Before you can learn how to hack, you have to learn how Linux works. Some basics for using linux:

- `echo` - similar to `print` in most programming languages. Typing `echo "hi"` will literally print the word "hi" to the screen.
- `cd` - stands for change directory. When you execute a command, you are always doing so from a specific directory. To change the directory, type cd and whichever directory you want to go to.

In the first problem, we'll learn about a function called `ls`. Log in to the web shell, and type `cd /problems/ls` to get started.

## Hint

If you're still unsure how to solve this problem, ask for help on the [chat](http://easyctf.com/irc) or take a look on our Learn page.

## Solution

```bash
login as: user37142
user37142@shell.easyctf.com's password:

user37142@easyctf:~$ cd /problems/ls
user37142@easyctf:/problems/ls$ ls
look_i_am_a_flag.txt
```

## Flag

`look_i_am_a_flag` or `look_i_am_a_flag.txt`