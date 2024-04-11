folder='vendor/matrix-platform/swagger'

rm -rf www/swagger
mkdir -p www/swagger
cp -R vendor/swagger-api/swagger-ui/dist/* www/swagger
sed -i '/^    url: /s/https:\/\/petstore.swagger.io\/v2/../' www/swagger/swagger-initializer.js

for path in $(cat ${folder}/doc/gitignore) ; do
    grep -qxF "$path" .gitignore || echo "$path" >> .gitignore
done
