
def is_sub(s: str, txt: str) -> bool:

	i = 0
	j = 0

	while i < len(txt):

		if j < len(s) and s[j] == txt[i]:
			j +=1
		i += 1

	return j == len(s)