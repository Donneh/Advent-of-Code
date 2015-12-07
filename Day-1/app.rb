file = File.open("input.txt")
content = file.read

position = 0
i = 0
while i < content.length
    if content[i] == '('
      position += 1
    else
      position -= 1
    end

    if position == -1
      puts i
      break
    end
    i += 1
end
