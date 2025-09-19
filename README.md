# SeiteLite /ˈsaɪtəˌlaɪt/

**SeiteLite** is a library and a framework for building websites, using modern (but just
vanilla) HTML, PHP, CSS, and Type/JavaScript.

**SeiteLite** is ASAPPLE 🍎:

- **a**s **s**imple **a**s **p**ossible
- **p**ractical
- **l**ightweight
- **e**fficient
- and, of course (how else) opinionated.

This repository serves as:

- an example website created with SeiteLite
- documentation.

The core part of the framework is in [sL-core](https://github.com/SeiteLite/sl-core). It is
installed as a submodule at the path `public/sl`.

## Directory structure

```bash
/
├── public/           # website root directory
│   ├── index.php     # entry point
│   ├── dist/         # TS -> JS transpiled files
│   ├── pages/        # individual PHP page files
│   ├── sl/           # SeiteLite framework (submodule)
│   └── ...           # etc.
├── tools/            # development tools
├── build/            # the built *.d.ts files
└── ...               # etc.
```

## Prerequisites

- PHP 8+. SeiteLite is currently being developed and tested with PHP 8.3.6.
- Apache web server. SeiteLite relies on `.htaccess` files for directory-level
  configuration.

## Getting started

Clone the project:

```bash
# clone this repository
git clone https://github.com/SeiteLite/SeiteLite.git
# initialize the submodule
cd SeiteLite
git submodule init
git submodule update
# start the development server
docker compose up
```

## Development

## TypeScript

Run `pnpm build` to build the JavaScript files in `dist/`. During development, run
`pnpm watch` to build the files continuously, as needed.

## PHP

PHP 8 is a modern, slick language, if used parsimoniously and properly. SeiteLite uses PHP
as a programming and _templating_ language.

Debugging:

- start docker with `docker compose up`
- open `http://localhost:8080` in your browser, with live reload extension enabled
  - set Actual Server Address to http://localhost:8080/, Live Server Address to
    http://localhost:5500/ (or whatever is configured in VSCode)

## Three, two and one-letter names

The more often a name (identificator) is neing used, the shorter can and should be its name.
Therefore in the SeiteLite code are to be found, among others, these names:

| name    | meaning    |
| ------- | ---------- |
| **clr** | colour     |
| **fg**  | foreground |
| **bg**  | background |
|         |            |
| **tx**  | text       |
| **sm**  | small      |
| **md**  | medium     |
| **lg**  | large      |
|         |            |
| **wdt** | width      |
| **hgt** | height     |
|         |            |
| **brd** | border     |
| **rad** | radius     |
|         |            |
| **res** | result     |
|         |            |
| **tpl** | template   |
|         |            |
| **s**   | string     |

and so on.

## Miscellaneous

- sizes are preferably specified in `rem`
