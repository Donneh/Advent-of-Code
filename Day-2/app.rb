input = []
File.open("input.txt") do |f|
    f.each_line do |line|
        input.push(line)
    end
end

def wrappingPaper(length, width, height)
    lowest = [length, width, height].min

    return ((2 * length * width) + (2 * length * height) + (2 * height * length)) + lowest
end

def ribbonLength(length, width, height)
    arr = [length, width, height]
    arr = arr.sort
    ribbon = (arr[0] * 2) + (arr[1] * 2)
    return (length * width * height) + ribbon
end

def total(input)
    paper = 0
    ribbon = 0
    input.each do |present|
        sides = present.split('x')
        paper += wrappingPaper(integer(sides[0]), integer(sides[1]), integer(sides[2]))
        ribbon += ribbonLength(integer(sides[0]), integer(sides[1]), integer(sides[2]))
    end

    return [paper, length]
end

puts total(input)[0]
