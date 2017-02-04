#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <iostream>
using namespace std;


int main(int argc, char *argv[])
{
        int pass = 0;
       char mybuffer[5];
       cout<<"please enter the password: ";
       // a prompt how to execute the program...
       gets(mybuffer);
        if(strcmp(mybuffer, "Pass")){
            cout<<endl<<"Access Denied" << endl;
        }
        else {
            cout<<endl <<"Access Granted"<<endl;
            cout<<"Flage = nsdlklndfsnflnnfnlaf" <<endl;
            pass = 1;
        }

        if(pass){
            cout<<endl<<"root Privileges"<<endl;
        }


}
