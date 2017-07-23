#!/usr/bin/env ruby

require 'rubygems'
require 'highline'
require 'net/sftp'
require 'FileUtils'
remote_host = 'fancytouchphotography.com'
remote_dir = Hash.new
#/fileserver/D/WebsiteFiles/test_sites/test.thewiseagent.com
remote_dir['test'] = '/php/file_browser/'
remote_dir['live'] = '/php/imageManager/'

local_dir = '/Users/chrisgaughan/documents/git/imageManager/'
list_dir = '/Users/chrisgaughan/documents/git/Ruby/'
prepend = ''

if ARGV.length == 0
  puts 'Usage: wa_upload list_file'
  exit
end

list_file = list_dir + ARGV.shift

password = HighLine.new.ask('password: ') { |q| q.echo = false }

$remote_site = 'test'


#Net::SFTP.start(remote_host, 'Administrator', {:password => password}) do |sftp|
#Net::SFTP.start(remote_host, 'Administrator', :port => 22, :password => password) do |sftp|
  while true
    remaining = File.readlines(list_file)

    while remaining.length > 0
      chunk = remaining.slice!(0, 5)
      ups = []
      chunk.each do |line|
        line = line.strip
        unless line == '' || line[0..0] == '#'
          local_file = local_dir + prepend + line
          remote_file = remote_dir[$remote_site] + prepend + line
          puts
          puts local_file
          puts remote_file
          #ups << FileUtils.cp(local_file, remote_file)
	  FileUtils.cp(local_file, remote_file)
        end
      end

      #ups.each {|up| up.wait}
    end
    puts
    print 'done> '
    newinput = gets.strip
    if newinput == 'live'
      $remote_site = 'live'
      puts 'Are you sure you want to upload to the live site? (y/n)'
      if gets.strip.downcase != 'y'
        puts 'Exiting.'
        exit
      end
    elsif newinput == 'q'
        puts 'Exiting.'
 	exit
    else
      $remote_site = 'test'
    end
  end
#end

