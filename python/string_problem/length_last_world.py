



def get_length(string: str) -> int:

	count = 0

	length = len(string) - 1

	while(length > 0):

		if string[length] == " ":

			break

		count += 1

		length -= 1

	return count