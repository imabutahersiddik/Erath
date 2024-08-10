#!/bin/bash

# Loop through all PHP files in the current directory
for file in *.php; do
    # Get the file name without the extension
    filename="${file%.*}"

    # Use sed to replace the specified words with the filename prefix
    sed -i.bak -E "s/\b(encryptBtn|downloadLink|copyUrlBtn|outputUrl|fileInput)\b/${filename}&/g" "$file"
done