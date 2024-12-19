
export const groupAnagram = (list) => {
    const hash = {};

    for (let word of list) {

        let letters = word.split('').sort().join('');
        
        if (!(letters in hash)) {

            hash[letters] = [];

        }

        hash[letters].push(word);

    }

    return Object.values(hash);
};

