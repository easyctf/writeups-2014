#include<stdio.h>
#include<stdlib.h>

char *flag = "xxxxxxxxxxx";

int main() {
        printf("%s\n", "Please enter the character \\x07 to get the flag!");
        char input[1];
        scanf("%s", input);
        if (input[0] == 7) {
                printf("Wow! Your flag is: %s\n", flag);
        } else {
                printf("%s\n", "Darn, try again!");
        }
        return 0;
}
