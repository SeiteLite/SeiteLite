let fs = require('fs-extra')
let purge = async () => {
  try {
    await fs.remove('build/')
    await fs.remove('public/dist/')
  } catch (err) {
    console.error('Purge error:', err)
  }
}

purge()
