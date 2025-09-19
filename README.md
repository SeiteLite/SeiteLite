# SeiteLite /ˈsaɪtəˌlaɪt/

**SeiteLite** is a library and a framework for building websites, using modern (but just
vanilla) HTML, PHP, CSS, and Type/JavaScript.

**SeiteLite** is ASAPPLE 🍎:

- **a**s **s**imple **a**s **p**ossible
- **p**ractical
- **l**ightweight
- **e**fficient.

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

### TypeScript

Run `pnpm build` to build the JavaScript files in `dist/`. During development, run
`pnpm watch` to build the files continuously, as needed.
