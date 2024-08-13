// jest.config.js
module.exports = {
    testMatch: ['**/test/**/*.test.js'],
    transform: {
        '^.+\\.jsx?$': 'babel-jest',
    },
    silent: false,  // Ensure this is set to false
    testEnvironment: 'node',
};

