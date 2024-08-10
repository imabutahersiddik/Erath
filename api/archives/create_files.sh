#!/bin/bash

# Define the original file
original_file="example.php"

# Define the formats you want to create
formats=("zip" "rar" "tar" "gz" "7z" "iso" "arj" "lha" "cab" "dmg" "ace" "bz2" "sit" "cpio" "z" "lz" "lzma" "xz" "p7z" "jar" "hqx" "cbr" "cbt" "tar.bz2" "tar.xz" "zipx" "war" "tbz" "tbz2" "tar.lz" "tar.lzma" "tar.zst" "lzip" "lzop" "sqz" "zpaq" "zip64" "pk3" "pk4" "pak" "wim" "vhd" "vmdk" "taz" "zst" "zipx" "rar5")
format_names=("ZIP" "RAR" "TAR" "GZ" "7Z" "ISO" "ARJ" "LHA" "CAB" "DMG" "ACE" "BZ2" "SIT" "CPIO" "Z" "LZ" "LZMA" "XZ" "P7Z" "JAR" "HQX" "CBR" "CBT" "TAR.BZ2" "TAR.XZ" "ZIPX" "WAR" "TBZ" "TBZ2" "TAR.LZ" "TAR.LZMA" "TAR.ZST" "LZIP" "LZOP" "SQZ" "ZPAQ" "ZIP64" "PK3" "PK4" "PAK" "WIM" "VHD" "VMDK" "TAZ" "ZST" "ZIPX" "RAR5")


# Loop through each format to create a new PHP file and replace the word
for i in "${!formats[@]}"; do
    # Create the new file name in lowercase with .php extension
    new_file="${formats[$i]}.php"
    
    # Copy the original file to the new file
    cp "$original_file" "$new_file"
    
    # Replace "PDF", "Pdf", and "pdf" with the corresponding format name
    sed -i "s/PDF/${format_names[$i]}/g; s/Pdf/${format_names[$i]}/g; s/pdf/${formats[$i]}/g" "$new_file"
done