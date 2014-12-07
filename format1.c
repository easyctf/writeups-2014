#include <stdio.h>
#include <stdlib.h>
#include <fcntl.h>

int key = 0;

void vuln(){
    gid_t gid = getegid();
    setresgid(gid, gid, gid);
    system("/bin/sh -i");
}

int main(int argc, char **argv){
    int *ptr = &key;
    printf(argv[1]);

    if (key > 9000){
        vuln();
    }
    return 0;
}
