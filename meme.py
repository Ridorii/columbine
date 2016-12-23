import random
f = open('firstnames.txt')
e = open('lastnames.txt')
firstnames = f.read().split("\n")
lastnames = e.read().split("\n")
print random.choice(firstnames)+ " " + random.choice(lastnames)
f.close()
e.close()
