# DesignPattern
Some example of pattern design in PHP

##Doctrine
###Generate entities:
` php vendor/doctrine/orm/bin/doctrine.php orm:generate:entities src --generate-annotations=true`

###Update entities:
` php vendor/doctrine/orm/bin/doctrine.php orm:schema-tool:create`