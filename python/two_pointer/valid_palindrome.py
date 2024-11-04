
import re;

def is_valid(s: str) -> bool:

	txt = s.lower()
	left = 0 
	right = len(s) - 1

	while left < right:

		while left < right and not re.findall('/a-z0-9/',txt[left]):
			left+=1

		while left < right and not re.findall('/a-z0-9/',txt[right]):
			right -=1

		if txt[left] != txt[right] :
			return False

		left += 1
		right -= 1
	return True	