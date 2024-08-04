# LeetCode Solutions Repository

Welcome to the LeetCode Solutions Repository! This repository is dedicated to solving LeetCode problems in multiple programming languages, starting with PHP. The goal is to provide clear and efficient solutions to a variety of coding challenges, organized by language and problem type.

## Repository Structure

The repository is organized into directories based on programming languages and problem tags. Each problem is solved within a class, and each class may contain multiple solution functions, representing different approaches to solving the same problem. Each solution class has a corresponding test case class to ensure correctness. The structure is as follows:

```angular2html
/repo-root
    ├── php/
    │   ├── StringProblem/
    │   │   ├── ReverseString.php
    │   │   ├── ReverseStringTest.php
    │   │   └── ...
    │   ├── ArrayProblem/
    │   │   ├── TwoSum.php
    │   │   ├── TwoSumTest.php
    │   │   └── ...
    │   └── ...
    ├── js/
    │   ├── stringProblem/
    │   │   ├── reverseString.js
    │   │   ├── reverseString.test.js
    │   │   └── ...
    │   ├── arrayProblem/
    │   │   ├── twoSum.js
    │   │   ├── twoSum.test.js
    │   │   └── ...
    │   └── ...
    ├── python/
    │   ├── string_problem/
    │   │   ├── reverse_string.py
    │   │   ├── test_reverse_string.py
    │   │   └── ...
    │   ├── array_problem/
    │   │   ├── two_sum.py
    │   │   ├── test_two_sum.py
    │   │   └── ...
    │   └── ...


```

### Directory Explanation

- **PHP (`php/`)**: Contains solutions implemented in PHP, organized by problem tags such as `string`, `array`, etc. This will be the primary focus initially.
- **JavaScript (`js/`)**: Contains solutions implemented in JavaScript, structured similarly to PHP.
- **Python (`python/`)**: Contains solutions implemented in Python, following the same organization.

### Example Problem Structure

Each problem is solved in a dedicated class, and the test case for the problem is written in a separate class. Multiple solution functions within the same class represent different approaches or attempts at solving the problem. For example:

- **Problem**: Reverse a string
    - **PHP**:
        - Solution: `ReverseString.php` (containing multiple functions like `reverseStringSolution1()`, `reverseStringSolution2()`, etc.)
        - Test Case: `ReverseStringTest.php`
    - **JavaScript**:
        - Solution: `reverseString.js` (containing multiple functions like `reverseStringSolution1()`, `reverseStringSolution2()`, etc.)
        - Test Case: `reverseString.test.js`
    - **Python**:
        - Solution: `reverse_string.py` (containing multiple functions like `reverse_string_solution1()`, `reverse_string_solution2()`, etc.)
        - Test Case: `test_reverse_string.py`

## Getting Started

### Prerequisites

To run the solutions and tests, ensure you have the following installed on your machine:

- **PHP**: Version 8.0 or later
- **Node.js**: Version 12 or later (for JavaScript)
- **Python**: Version 3.10 or later

### Running the Solutions

To run a solution, navigate to the appropriate directory and execute the solution file. For example, to run a PHP solution:

````
./vendor/bin/phpunit test/ReverseStringTest.php

````

## Contributing

Contributions are welcome! If you'd like to contribute a new solution or improve an existing one, please fork the repository and submit a pull request.

### Contribution Guidelines

- Follow the existing directory structure.
- Write clear and concise code.
- Include multiple solution functions within each class to showcase different approaches if possible.
- Ensure each solution has a corresponding test case class.
- Ensure all tests pass before submitting a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.


