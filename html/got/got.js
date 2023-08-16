const url = new URL(window.location.href);
const params = url.searchParams;
const upload_text = params.get("upload_text");
console.log(`upload_text: ${upload_text}`)

const upload = params.get("upload");
console.log(`upload: ${upload}`)
