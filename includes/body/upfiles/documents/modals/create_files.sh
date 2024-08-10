#!/bin/bash

# Define the original file
original_file="example.php"

# Define the formats you want to create
formats=("pdf" "docx" "xlsx" "txt" "csv" "pptx")
format_names=("PDF" "DOCX" "XLSX" "TXT" "CSV" "PPTX")

# Loop through each format to create a new PHP file and replace the word
for i in "${!formats[@]}"; do
    # Create the new file name in lowercase with .php extension
    new_file="${formats[$i]}.php"
    
    # Copy the original file to the new file
    cp "$original_file" "$new_file"
    
    # Replace "PDF", "Pdf", and "pdf" with the corresponding format name
    sed -i "s/PDF/${format_names[$i]}/g; s/Pdf/${format_names[$i]}/g; s/pdf/${formats[$i]}/g" "$new_file"
done