// jest.config.js
module.exports = {
    testMatch: ['**/test/**/*.test.js'],
    transform: {
        '^.+\\.jsx?$': 'babel-jest',
    },
    testEnvironment: 'node',
};

