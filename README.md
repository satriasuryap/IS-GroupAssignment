<h1>Information Security Group Assignment 1</h1>

Group IUP7
- Eric Azka Nugroho
- Raden Roro Kayla Angelica Priambudi
- Satria Surya Prana

## Project Overview
This project is developed to fulfil Assignment 1 of the Information Security (IUP class) course. This analysis report provides an overview of the development process and analysis results of a web application built using Laravel that stores and retrieves users' private data, including name, email, phone number, ID card image, PDF/DOC/XLS file, and video file, all encrypted using AES, DES and RC4 encryption algorithms, and accessed with a username and password.

## Key Decisions and Implementation

- C**hoice of Cryptographic Libraries**: The code utilizes Laravel's built-in cryptographic library for AES encryption, and a custom implementation for DES encryption (DesEncrypter) and for RC4 encryption (RC4Encrypter). These libraries have been chosen for their robustness and security features.
- **Non-ECB Mode**: This code utilizes IV in the CBC mode for DES encryption. In CBC mode, each plaintext block is XORed with the previous ciphertext block before encryption. This XORed value, called the Initialization Vector (IV), is used to add an element of randomness to the encryption process and ensures that the same plaintext does not always produce the same ciphertext.
- **Data Storage**: The code stores encrypted user data in the application's storage (likely on the server). This ensures data security as the user's data is not stored in plaintext.
- **File Storage**: The application can store various types of files, including ID card images, PDF/DOC/XLS files, and video files. These files are encrypted before storage and decrypted upon retrieval.

## Performance Analysis
In our evaluation, we analyzed the differences between three encryption algorithms which are AES, DES, and RC4, specifically focused on examining the running time and the resulting ciphertext when encrypting and decrypting data. To achieve this, we conducted tests where we showed the running time and measured the encryption performance of each algorithm.

### AES (Advanced Encryption Standard):

Example for ‘Name’ input:

Encrypted message (ciphertext):

Running time (encryption):

Decrypted data:

Running time (decryption):

Total running time:

### DES (Data Encryption Standard):

Example for ‘Name’ input:

Encrypted message (ciphertext):

Running time (encryption):

Decrypted data:

Running time (decryption):

Total running time:

### RC4 (Rivest Cipher 4):

Example for ‘Name’ input:

Encrypted message (ciphertext):

Running time (encryption):

Decrypted data:

Running time (decryption):

Total running time:

### Overall Analysis:
In conclusion, the analysis underscores the importance of selecting the right encryption algorithm for data security. AES excelled in both running time and generating secure ciphertext, making it the preferred choice for most modern applications. Meanwhile, DES, while employing CBC mode and an IV, still fell short in terms of both security and efficiency, emphasizing the need for its replacement. RC4, a legacy algorithm with known vulnerabilities, should be avoided for sensitive data encryption. It is crucial to prioritize security and performance when choosing an encryption method for your application to ensure the confidentiality and integrity of data.

## Recommendations
- Improve Security: Avoid using RC4 and DES due to their vulnerabilities. Stick with AES for data encryption.
- Enhance Data Security: Store decrypted data in a more secure location that is not publicly accessible.
- Performance Analysis: Conduct performance testing to assess the impact of different encryption algorithms and modes on system performance.

