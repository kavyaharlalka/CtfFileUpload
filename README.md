# CtfFileUpload

Overview
The goal of this challenge is to use a PHP file inclusion vulnerability and a file upload exploit to obtain access to secret files on the server. A web application that enables users to upload files and see them on a website is the subject of the challenge. However, a PHP file inclusion attack can take advantage of the application's vulnerability to include and run any PHP code. The program also has a file upload capability that is open to file upload attacks, enabling attackers to upload malicious PHP files to the server. To complete the challenge, competitors must upload a PHP shell to the server and execute the shell using the PHP file inclusion vulnerability. The hidden directory, which houses the flag, may then be found by browsing the server's filesystem from that point.

Challenge 1: Exploit a vulnerability in the given PHP file inclusion functionality.

Challenge 2: Exploit a vulnerability in the given PHP file upload functionality.