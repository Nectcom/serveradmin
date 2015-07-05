# serveradmin
serveradminはFTPサーバーの管理者向けWebクライアントです。
Ruby on Railsで構成されており、LDAPでユーザー管理を行っています。
追加GemとしてActiveAdminとActiveLdapを導入しています。

## Usage
### ユーザーの追加
* ユーザーは部長またはチームリーダのみ追加・削除が可能
* 入学年・所属部署・(Mail Address)・チーム名・名前の各フィールドを持つ
* 名前をユーザー名とする
* チーム名ごとにユーザーグループを持つ
* csvファイルで一括入力も可能

### ユーザー情報の変更
* 変更は本人か部長またはチームリーダのいずれかのみ可能
* チーム名・所属部署を除くフィールドの変更が可能
* チーム名は部長またはチームリーダのみが変更可能で、一括指定できる

### LDAP命名規則
* posixAccountを使用する

| Field | Value |
|-------|-------|
| objectCass | posixAccount |
| objectCass | shadowAccount |
| c | JP |
| dc | GNCT |
| dc | robot\_Club |
| ou | 設計(design) or 加工(machining) or 電気(electroics) |
| cn | 名前 |
| sn | 氏名 |
| mail | mail address |
| uidNumber | 2000番から連番|
| gidNumber | ouにあわせて2000番から連番 |
| homeDirectory | /home/share/ |
| loginShell | /usr/sbin/nologin |
| userPassword | SSHA暗号化 |
