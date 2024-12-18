


def group_anagram(words: list) -> list:
    hashmap = {}

    for word in words:

        sortedWord = ''.join(sorted(word))
        
        if sortedWord in hashmap:

            hashmap[sortedWord].append(word)

        else:
            
            hashmap[sortedWord] = [word]
    
    return list(hashmap.values())
