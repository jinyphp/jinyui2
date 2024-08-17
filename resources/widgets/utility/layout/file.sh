#!/bin/bash
for file in *_*; do
  first_word="${file%%_*}"
  rest="${file#*_}"
  mkdir -p "$first_word"
  mv "$file" "$first_word/$rest"
done

