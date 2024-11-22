def find_substring(txt: str, words: list) -> list:
    if len(txt) == 0 or len(words) == 0 or len(txt) < len(words) * len(words[0]):
        return []

    word_length = len(words[0])
    result = []
    freqMap = {}

    # Build frequency map for words
    for word in words:
        if word in freqMap:
            freqMap[word] += 1
        else:
            freqMap[word] = 1

    # Outer loop for word-length alignments
    for index in range(word_length):
        start = index
        count = 0
        seen = {}

        # Sliding window
        for end in range(index, len(txt) - word_length + 1, word_length):
            word = txt[end:end + word_length]

            if word in freqMap:
                if word in seen:
                    seen[word] += 1
                else:
                    seen[word] = 1

                count += 1

                # Shrink window if frequency exceeds allowed
                while seen[word] > freqMap[word]:
                    leftword = txt[start:start + word_length]
                    seen[leftword] -= 1
                    count -= 1
                    start += word_length

                # Check if valid substring
                if count == len(words):
                    result.append(start)

            else:
                # Reset window on invalid word
                seen = {}
                count = 0
                start = end + word_length

    return result
