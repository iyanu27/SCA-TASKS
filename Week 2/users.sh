
#!/bin/bash
output=users.txt
cat $output
grep 'M' users.txt

echo
grep 'F' users.txt

echo

awk '{
        age[$1]+=$3  #accumulate  total age for this gender
        counter[$1]+=1  #increment  count of record for this gender female or m$
        }
         END {
                for (gender in age)
                 {
                      print "The Average age of  " gender, "", age[gender]"",  "is" "", age[gender]/counter[gender]


                 }
                }' users.txt
