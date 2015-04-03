
Welcome to Design Book!
=====================


Hey! I'm your first Markdown document in **StackEdit**[^stackedit]. Don't delete me, I'm very helpful! I can be recovered anyway in the **Utils** tab of the <i class="icon-cog"></i> **Settings** dialog.

----------


Item one 1
-------------

StackEdit stores your documents in your browser, which means all your documents are automatically saved locally and are accessible **offline!**

> **Note:**

> - StackEdit is accessible offline after the application has been loaded for the first time.
> - Your local documents are not shared between different browsers or computers.
> - Clearing your browser's data may **delete all your local documents!** Make sure your documents are synchronized with **Google Drive** or **Dropbox** (check out the [<i class="icon-refresh"></i> Synchronization](#synchronization) section).

#### <i class="icon-file"></i> Create a document

The document panel is accessible using the <i class="icon-folder-open"></i> button in the navigation bar. You can create a new document by clicking <i class="icon-file"></i> **New document** in the document panel.



------------------------------------------------------




### Encryption

**Markdown Extra** has a special syntax for tables:
You can specify column alignment with one or two colons:


<table class="table table-bordered table-striped table-condensed">
   <tr>
      <td><b>Level</b></td>
      <td><b>Catelog</b></td>
      <td><b>Keywords</b></td>
      <td><b>Reg</b></td>
   </tr>
   <tr>
      <td rowspan="3">Strong</td>
      <td>python</td>
      <td>
AES.new<br>
SKIPJACK<br>
enctype='AES'</td>
      <td>
=\s*AES\.new\(|
<br> SKIPJACK |
<br> enctype\s*=\s*(\'|\")AES(\'|\")
      </td>
   </tr>
   <tr>
      <td>java</td>
      <td>AES
<br>AESWrap
<br>PKCS1Padding
<br>PKCS5Padding</td>
      <td> AES |
<br>AESWrap |
<br>PKCS1Padding |
<br>PKCS5Padding </td>
   </tr>
   <tr>
      <td>openssl</td>
      <td>aes-128
<br>aes-128-cbc
<br>aes-128-cbc-hmac-sha1
<br>aes-128-cfb
<br>aes-128-cfb1
<br>aes-128-cfb8
<br>aes-128-ctr
<br>aes-128-ecb
<br>aes-128-gcm
<br>aes-128-ofb
<br>aes-192
<br>aes-192-cbc
<br>aes-192-cfb
<br>aes-192-cfb1
<br>aes-192-cfb8
<br>aes-192-ctr
<br>aes-192-ecb
<br>aes-192-gcm
<br>aes-192-ofb
<br>aes-256
<br>aes-256-cbc
<br>aes-256-cbc-hmac-sha1
<br>aes-256-cfb
<br>aes-256-cfb1
<br>aes-256-cfb8
<br>aes-256-ctr
<br>aes-256-ecb
<br>aes-256-gcm
<br>aes-256-ofb
<br>aes-256-xts
<br>camellia-128-cbc
<br>camellia-128-cfb
<br>camellia-128-cfb1
<br>camellia-128-cfb8
<br>camellia-128-ecb
<br>camellia-128-ofb
<br>camellia-192-cbc
<br>camellia-192-cfb
<br>camellia-192-cfb1
<br>camellia-192-cfb8
<br>camellia-192-ecb
<br>camellia-192-ofb
<br>camellia-256-cbc
<br>camellia-256-cfb
<br>camellia-256-cfb1
<br>camellia-256-cfb8
<br>camellia-256-ecb
<br>camellia-256-ofb
<br>aes128
<br>aes192
<br>aes256
<br>desx
<br>desx-cbc
<br>camellia128
<br>camellia192
<br>camellia256
<br>blowfish
<br>id-aes128-GCM
<br>id-aes192-GCM
<br>id-aes256-GCM</td>
      <td>aes\d{3} |
<br>camellia\d{3} |
<br>blowfish |
<br>id-aes\d{3}-GCM |
<br>desx |
<br>desx-cbc </td>
   </tr>
   <tr>
      <td rowspan="3">Unknow</td>
      <td>python</td>
      <td>DES3.new
<br>ARC4.new
<br>Blowfish.new
<br>CAST.new
<br>PKCS1_OAEP.new
<br>PKCS1_v1_5.new
<br>enctype='DES3'
<br>3des</td>
      <td>(DES3|ARC4|Blowfish|CAST|PKCS1_OAEP|PKCS1_OAP|PKCS1_v1_5)\.new |
<br>3des |
<br>enctype\s*=\s*(\'|\")DES3(\'|\") </td>
   </tr>
   <tr>
      <td>java</td>
      <td>DESedeWrap
<br>ECIES
<br>PBE
<br>RC4
<br>RC5
<br>CBC
<br>CFB
<br>CFBx
<br>CTR
<br>CTS
<br>ECB
<br>OFB
<br>OFBx
<br>PCBC
<br>ISO10126Padding
<br>OAEPPadding
<br>OAEPWith<digest>And<mgf>Padding
<br>SSL3Padding
<br>blowfish
<br>ARCFOUR
<br>DESede
<br>PBEWith<digest>And<encryption>
<br>PBEWith<prf>And<encryption>
<br>Cipher.getInstance(</td>
      <td>DESedeWrap |
<br>ECIES |
<br>PBE |
<br>RC4 |
<br>RC5 |
<br>CBC |
<br>CFB |
<br>CFBx |
<br>CTR |
<br>CTS |
<br>ECB |
<br>OFB |
<br>OFBx |
<br>PCBC |
<br>ISO10126Padding |
<br>OAEPPadding |
<br>OAEPWith.+And.+Padding |
<br>SSL3Padding |
<br>blowfish|
<br>ARCFOUR |
<br>DESede |
<br>PBEWith.+And.+ |
<br>Cipher.getInstance\( </td>
   </tr>
   <tr>
      <td>openssl</td>
      <td> bf
<br>bf-cbc
<br>bf-cfb
<br>bf-ecb
<br>bf-ofb
<br>des3
<br>des-ede3
<br>des-ede3-cbc
<br>des-ede3-cfb
<br>des-ede3-cfb1
<br>des-ede3-cfb8
<br>des-ede3-ofb
<br>des-ede3-cfb(>112bits)
<br>rc4
<br>rc4-40
<br>rc4-hmac-md5
<br>idea
<br>idea-cbc
<br>idea-cfb
<br>idea-ecb
<br>idea-ofb
<br>seed
<br>seed-cbc
<br>seed-cfb
<br>seed-ecb
<br>seed-ofb
<br>cast
<br>cast-cbc
<br>cast5-cbc
<br>cast5-cfb
<br>cast5-ecb
<br>cast5-ofb
<br>openssl enc
<br>openssl dsa --passout
<br>openssl rsa --passout
<br>openssl gendsa
<br>openssl genrsa
<br>openssl pkcs12</td>
      <td>(\b|\s+|\'|\")bf(\b|-.{3})(\b|\s+|\'|\") |
<br>des3 |
<br>des-ede3(\b|-.{3,4}) |
<br>idea(\b|-.{3}) |
<br>seed(\b|-.{3}) |
<br>cast5(\b|-.{3}) |
<br>(\b|\s+|\'|\"|\.)cast(\b|-.{3}) (\b|\s+|\'|\"|\.)|
<br>rc4 |
<br>rc4-40 |
<br>rc4-hmac-md5 |
<br>openssl\s+(enc|dsa|rsa|gendsa|genrsa|pkcs12) </td>
   </tr>

   <tr>
      <td rowspan="3">Weak</td>
      <td>python</td>
      <td>DES.new
<br>ARC2.new
<br>XOR.new
<br>enctype='DES'
<br>algos['DES']
<br>algos['MD5']</td>
      <td>(DES|ARC2|XOR)\.new |
<br>enctype\s*=\s*(\'|\")DES(\'|\") |
<br>algos\(\'|\")(DES|MD5)(\'|\")\ </td>
   </tr>
   <tr>
      <td>java</td>
      <td>des
<br>NoPadding
<br>rc2</td>
      <td>des[^3] |
<br>NoPadding |
<br>rc2 </td>
   </tr>
   <tr>
      <td>openssl</td>
      <td>des-cbc
<br>des-cfb
<br>des-cfb1
<br>des-cfb8
<br>des-ecb
<br>des-ofb
<br>des
<br>des-ede
<br>des-ede-cbc
<br>des-ede-cfb
<br>des-ede-ofb
<br>rc2-40-cbc
<br>rc2-64-cbc
<br>rc2-cbc
<br>rc2-cfb
<br>rc2-ecb
<br>rc2-ofb
<br>RC2</td>
      <td>(\s+|\'|\")des(\b|-.{3,4}) |
<br>des-ede(\b|-.{3,4}) |
<br>rc2(\b|-.{3,15})</td>
   </tr>
</table>

