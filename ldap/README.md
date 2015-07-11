# LDAP Settings File

## Install

Run this code in this dir.
```bash
sudo yum -y install openldap-servers openldap-clients
sudo sh -c 'rm -rf /etc/openldap/slapd.d/*'
sudo /usr/libexec/openldap/convert-config.sh -f slapd.ldif -F /etc/openldap/slapd.d/
sudo sh -c 'rm -rf /var/lib/ldap/*'
sudo cp -av /usr/share/openldap-servers/DB_CONFIG.example /var/lib/ldap/DB_CONFIG
sudo chown ldap:ldap /var/lib/ldap/DB_CONFIG
sudo systemctl start slapd
sudo systemctl enable slapd
```

## Usage

* rootDN is "cn=manager,dc=robot\_club,dc=GNCT".
* userPassword is only write self and other dont read except to auth.
* users can read other user's dn.

#### Tree

GNCT --- robot\_club --- elec
                      |- design
                      |- process
