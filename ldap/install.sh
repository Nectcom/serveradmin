echo "setting..."

path=/etc/openldap/schema

for file in ${path}/*.ldif
do
  if [ $(echo $file | grep -e 'core') ]; then
    continue
  fi
  # echo ${file}
  ldapadd  -Y EXTERNAL -H ldapi:/// -f ${file}
done

