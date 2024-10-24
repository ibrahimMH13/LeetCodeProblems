import math

def justify(words, maxWidth):
    currentLineLength = 0
    currentLineWords = []
    result = []

    for word in words:
        if currentLineLength + len(currentLineWords) + len(word) > maxWidth:
            spaceAvailable = maxWidth - currentLineLength

            if len(currentLineWords) == 1:
                result.append(currentLineWords[0] + " " * spaceAvailable)
            else:
                spaceNeeded = len(currentLineWords) - 1
                evenlySpace = math.floor(spaceAvailable / spaceNeeded)
                extraSpace = spaceAvailable % spaceNeeded

                justifyLine = ""
                for i in range(spaceNeeded):
                    justifyLine += currentLineWords[i] + (" " * (evenlySpace + (1 if i < extraSpace else 0)))

                justifyLine += currentLineWords[len(currentLineWords) - 1]
                result.append(justifyLine)

            currentLineWords = []
            currentLineLength = 0

        currentLineLength += len(word)
        currentLineWords.append(word)

    # Handle the last line (left-aligned)
    lastLine = " ".join(currentLineWords)
    result.append(lastLine + (" " * (maxWidth - len(lastLine))))

    return result
