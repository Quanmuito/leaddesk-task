<br />
<div align="center">
    <h1 align="center"><a href="https://leaddesk.com/fi/">LeadDesk</a> Technical Assignment</h1>
    <h3 align="center">Quan Tran - Software Engineer</h3>
</div>


<!-- TABLE OF CONTENTS -->
<details>
    <summary>Table of Contents</summary>
    <ol>
        <li>
            <a href="#about-the-project">About The Project</a>
            <ul>
                <li><a href="#built-with">Built With</a></li>
            </ul>
        </li>
        <li>
            <a href="#getting-started">Getting Started</a>
            <ul>
                <li><a href="#prerequisites">Prerequisites</a></li>
                <li><a href="#installation">Installation</a></li>
            </ul>
        </li>
        <li>
            <a href="#usage">Usage</a>
            <ul>
                <li><a href="#automated-test">Automated test</a></li>
                <li><a href="#interactive-test">Interactive test</a></li>
            </ul>
        </li>
        <li><a href="#contact">Contact</a></li>
    </ol>
</details>


<!-- ABOUT THE PROJECT -->
## About The Project

The project contains 2 problems:
1. MaxSubArray: Subarray is a part of the original one dimensional array. Given an array, find out the maximum sum that can be calculated by taking contiguous part (including at least one element) of the original array.
2. Anagram: An anagram is direct word switch or word play, the result of rearranging the letters of a word or phrase to produce a new word or phrase, using all the original letters exactly once.

Project structure:
- .github: Github workflows
- public: static files for UI.
- src: problems and solutions
- tests: test files for all solutions.

Key features: Solution for the 2 problems, unit tests,CI workflow using Github Action.
A simple UI is added for interactive testing.

![image](https://projectpictures2024.s3.eu-north-1.amazonaws.com/leaddesktaskscr.png)

### Built With

[![PHP][PHP]][PHP-url] [![PHPUnit][PHPUnit]][PHPUnit-url] [![Composer][Composer]][Composer-url] [![GitHubActions][GitHubActions]][GitHubActions-url]


<!-- GETTING STARTED -->
## Getting Started
### Prerequisites
* Download and install PHP, version 8.3 is recommended. [Go to page](https://www.php.net/manual/en/install.php)
* Download and install Composer. [Go to page](https://getcomposer.org/download/)

### Installation
1. Open a new terminal and clone the repository
   ```sh
   git clone https://github.com/Quanmuito/leaddesk-task.git
   ```

2. Change directory
    ```sh
    cd leaddesk-task
    ```

3. Install packages with composer
    ```sh
    composer install
    ```


<!-- USAGE EXAMPLES -->
## Usage
### Automated test
- Automated test file can be found in `tests` directory.
- To run all test suites, open a terminal and run command
    ```sh
    php vendor/bin/phpunit
    ```

### Interactive test
- Change directory to `public` folder
    ```sh
    cd public
    ```

- Start PHP server (use a different port if 8000 is occupied)
    ```sh
    php -S localhost:8000
    ```

- Open a browser, go to [http://localhost:8000/](http://localhost:8000/)


<!-- CONTACT -->
## Contact

Quan Tran (Mr)
- LinkedIn: [https://www.linkedin.com/in/quanmuito/](https://www.linkedin.com/in/quanmuito/)
- Website: [https://www.quanmuito.com/](https://www.quanmuito.com/)
- Email: tranleminhquan1102@gmail.com

Project Link: [https://github.com/quanmuito/leaddesk-task](https://github.com/quanmuito/leaddesk-task)


<!-- MARKDOWN BADGES -->
[PHP]: https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white
[PHP-url]: https://www.php.net/
[PHPUnit]: https://img.shields.io/badge/phpunit-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white
[PHPUnit-url]: https://phpunit.de/index.html
[Composer]: https://img.shields.io/badge/Composer-885630?logo=composer&logoColor=fff&style=for-the-badge
[Composer-url]: https://getcomposer.org/
[GitHubActions]: https://img.shields.io/badge/GitHub%20Actions-2088FF?logo=githubactions&logoColor=fff&style=for-the-badge
[GitHubActions-url]: https://docs.github.com/en/actions
