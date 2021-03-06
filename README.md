Open Recommendation Platform - SDK
==================================
*Version 0.5*

The Open Recommendation Platform (ORP) is a distributed platform of entities capable of delivering recommendations for various purposes. It consists of recommendation providers and recommendation consumers that interact and communicate over a standardized protocol. This document describes the protocol and outlines the necessary steps a partner needs to take in order to integrate a technology as recommendation provider. The overall aim of the ORP is to obtain a better recommendation quality. In the context of advertising, better recommendations are defined by a higher CPM (cost per impression). In the context of on-site recommendations, better recommendations are defined by a higher CTR (click-through-rate). You will learn about these contexts in a later chapter. The chapter Push interface describes the API that recommendation providers need to implement.

Technical Restrictions
----------------------

Please ensure your system is able to reply within 100ms, as response time is critical for our application. Please further ensure that your system can handle the amount of incoming data. Expect up to several thousand requests per second. When we detect a performance problem, we may automatically decrease the amount of requests forwarded to your system.


State of Development
--------------------
The ORP and this protocol are actively being developed, so expect major changes of the API over time. This document is also still in an incomplete state. We will regularly publish updates.

For more informations about the ORP project please have a look at the http://orp.plista.com/




Requirements
------------
-  webserver (e.g. Apache)
-  PHP
-  make sure your response time is less than 100ms

If you consider to participate with a server from outside of Germany, please get in touch with us:<br>
*contest (at) plista (dot) com* <br>
This is necessary due to the response side of the server

Install (in Ubuntu)
-------------------

**1. install webserver**


`sudo apt-get install apache2`

For further details you may want to have a look at http://wiki.ubuntuusers.de/Apache


**2. enable PHP support**

`sudo apt-get install php5 libapache2-mod-php5`



For further details you may want to have a look at http://php.net/manual/de/install.php

**3. getting Sdk from git**

 install git<br>
`sudo apt-get install git`

 make sure to be in the right place<br>
`ch /var/www/`

 cloning the git<br>
`git clone git://github.com/plista/orp-sdk-php.git`

For further details you may want to have a look at http://githowto.com/

**4. getting Sdk ready** <br>
Have a look at the example provided in `classes/Plista/Orp/Sdk/Example`

**5. Sign up** <br>
Sign up at http://orp.plista.com <br>

Be sure to use the entire URL during the sign up process e.g.
`http://servername.domain/classes/Plista/Orp/Sdk/Example/index.php`

License
-------
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License as
published by the Free Software Foundation; either version 3 of
the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.



*powered by Plista GmbH (http://plista.com/)* .


