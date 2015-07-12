# @date 2015/07/12
# @auth nect
# @desc create ldap test users


file = File.open("testuser.ldif","w")

object = ["shadowAccount", "posixAccount", "inetOrgPerson"]
# need to sn,cn,mail,description(has admin?),uid,uidNumber,gidNumber,homeDirectory,userPassword,loginShell

DEF = {"homeDirectory" => "/home/share", "userPassword" => "test", "loginShell" => "/sbin/nologin"}
uidstart = 2020

ou_list = ["design","machining","electronics"]

30.times do | count |
  now_ou = ou_list[count % 3]
  file.puts "dn: uid=user#{count},ou=#{now_ou},dc=robot_club,dc=GNCT"

  object.each do | name | 
    file.puts "objectClass: #{name}"
  end

  file.puts "sn: name"
  file.puts "cn: #{count}"
  file.puts "mail: localhost@mail.com"
  file.puts "uid: user#{count}"
  file.puts "uidNumber: #{uidstart + count}"
  file.puts "gidNumber: 2000"
  
  DEF.each do | key, value |
    file.puts "#{key}: #{value}"
  end
  puts "#{count} user created."
  file.puts ""
end

