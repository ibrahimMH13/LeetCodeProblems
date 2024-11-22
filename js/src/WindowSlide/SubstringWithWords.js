export const findSubstring = (s, words) => {
    if (s.length === 0 || words.length === 0 || s.length < words[0].length * words.length) {
        return [];
    }

    let wordLength = words[0].length;
    let mapFreq = {};
    let result = [];

    // Build frequency map for words
    for (let i = 0; i < words.length; i++) {
        if (mapFreq[words[i]] !== undefined) {
            mapFreq[words[i]]++;
        } else {
            mapFreq[words[i]] = 1;
        }
    }

    // Outer loop for word-length alignments
    for (let i = 0; i < wordLength; i++) {
        let start = i;
        let count = 0;
        let seen = {};

        // Inner sliding window
        for (let j = i; j <= s.length - wordLength; j += wordLength) {
            let word = s.substring(j, j + wordLength);

            if (mapFreq[word] !== undefined) {
                // Add word to seen
                if (seen[word] !== undefined) {
                    seen[word]++;
                } else {
                    seen[word] = 1;
                }

                count++;

                // Shrink window if word exceeds frequency
                while (seen[word] > mapFreq[word]) {
                    let leftWord = s.substring(start, start + wordLength);
                    seen[leftWord]--;
                    count--;
                    start += wordLength;
                }

                // Check if valid substring
                if (count === words.length) {
                    result.push(start);
                }
            } else {
                // Reset on invalid word
                start = j + wordLength;
                count = 0;
                seen = {};
            }
        }
    }

    return result;
};
