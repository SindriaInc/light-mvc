#!/bin/bash

### Script written by sindriadev and SimoneGPHP for GITHUB.
### This script was realeased on GNU Licences and open source.

function typewriter {

	text="$1"
	delay="$2"

	for i in $(seq 0 $(expr length "${text}")) ; do
		echo -n "${text:$i:1}"
		sleep ${delay}
	done 

}

typewriter "Start commit and git management script" .1
echo #
echo "Do you want to commit?(Y/N): Please type lowercase yes"
read option;

if [ $option == yes ]
then typewriter "Ready to commit" .1
     echo #
     git add -A
     git commit
else typewriter "Go to push" .1
     echo #
fi

echo "Insert branch name:"
read branch;
typewriter "$branch Selected" .1
echo #
echo "Are you sure?(Y/N): Please type lowercase yes"
read checkPush;
if [ $checkPush == yes ]
then typewriter "Pushing..." .1
     echo #
     git push -u origin $branch
else typewriter "Wrong check" .1     
     echo #
     typewriter "Close script" .1
     echo #
     exit 1;
fi
