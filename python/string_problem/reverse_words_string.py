

def reverse_words(s):

    s = s.strip()
    
    words = s.split()
    
    words.reverse()
    
    return ' '.join(words)
