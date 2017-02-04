#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <iostream>
using namespace std;


int main(int argc, char *argv[])
{
   int pass = 0;
   char mybuffer[30];
   cout<<"please enter the password: ";
   gets(mybuffer);
   if(strcmp(mybuffer, "b3tY0ucanTgu3ssM3333")){
        cout<<endl<<"Access Denied" << endl;
    } else {
        cout<<endl <<"Access Granted"<<endl;
        cout<<"Flage = 133" <<endl;
        pass = 1;
    }
    if(pass){
        cout<<endl<<"root Privileges Flag = ~1337bufferOv3fl0wz!"<<endl;
    }
}
